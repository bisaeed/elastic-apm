<?php

namespace bisaeed\ElasticApm;

use Elastic\Apm\ElasticApm;

$transaction = ElasticApm::beginCurrentTransaction(
    'test',
    'test_type'
);

try {
    // do your thing ...
} finally {
    $transaction->end();
}
