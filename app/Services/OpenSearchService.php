<?php

namespace App\Services;

use OpenSearch\Client;
use OpenSearch\ClientBuilder;

class OpenSearchService
{
    protected Client $openSearchClient;

    function __construct()
    {
        $this->openSearchClient = ClientBuilder::create()
            ->setHosts(['https://localhost:9200'])
            ->setBasicAuthentication('admin', 'ZxCvB091@')
            ->setSSLVerification(false)
            ->build();
    }

    public function health()
    {
        return $this->openSearchClient->cluster()->health();
    }

    public function indexDocument(string $indexName, array $document)
    {
        $this->openSearchClient->index([
            'index' => $indexName,
            'id' => $document['id'],
            'body' => $document,
        ]);
    }

    public function dropIndex(string $indexName)
    {
        $this->openSearchClient->indices()->delete(['index' => $indexName]);
    }

}
