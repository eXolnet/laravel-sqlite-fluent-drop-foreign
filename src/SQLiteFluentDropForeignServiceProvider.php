<?php

namespace Exolnet\SQLiteFluentDropForeign;

use Closure;
use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SQLiteBuilder;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Fluent;
use Illuminate\Support\ServiceProvider;

class SQLiteFluentDropForeignServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        Connection::resolverFor('sqlite', function ($connection, $database, $prefix, $config) {
            return new class($connection, $database, $prefix, $config) extends SQLiteConnection
            {
                public function getSchemaBuilder()
                {
                    if ($this->schemaGrammar === null) {
                        $this->useDefaultSchemaGrammar();
                    }
                    return new class($this) extends SQLiteBuilder
                    {
                        protected function createBlueprint($table, ?Closure $callback = null)
                        {
                            return new class($table, $callback) extends Blueprint
                            {
                                public function dropForeign($index)
                                {
                                    if (!is_array($index)) {
                                        $foreign = ' ' . $index;
                                    } else {
                                        $foreign = ' on ' . $index[0];
                                    }

                                    fwrite(
                                        STDERR,
                                        "You are using drop foreign" . $foreign .
                                        " in your migration which is not supported in sqlite.\n"
                                    );

                                    return new Fluent();
                                }
                            };
                        }
                    };
                }
            };
        });
    }
}
