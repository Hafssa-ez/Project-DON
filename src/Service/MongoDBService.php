<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use DateTimeImmutable;

class MongoDBService {
    private HttpClientInterface $httpClient;
  
    public function __construct(HttpClientInterface $httpClient) { 
        $this->httpClient = $httpClient;
    }

    public function insertVisit(string $pageName){
        $this->httpClient->request('POST', 'https://us-east-2.aws.neurelo.com/rest/visits/__one', [
            'headers' => [
                'X-API-Key' => 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImFybjphd3M6a21zOnVzLWVhc3QtMjowMzczODQxMTc5ODQ6YWxpYXMvYjJjYWNlYWItQXV0aC1LZXkifQ.eyJlbnZpcm9ubWVudF9pZCI6ImQyZjI1MWU4LTNkZWUtNDE1Ni1hY2I4LTI5Y2NmNTA0MDMyZCIsImdhdGV3YXlfaWQiOiJnd19iMmNhY2VhYi0yYTRlLTQ3YzYtOTlkZS1iNDM3M2I4NWE2MjIiLCJwb2xpY2llcyI6WyJSRUFEIiwiV1JJVEUiLCJVUERBVEUiLCJERUxFVEUiLCJDVVNUT00iXSwiaWF0IjoiMjAyNS0wMy0xM1QwMTowMjoyOS44ODQ2NzQyNzBaIiwianRpIjoiMGM5YTAxNWItZjdiOC00MWI1LWJhNDUtNmZjMjViZDY4ZTM4In0.q-I9FZDsddwYh2fgYCVGW5uG1eTV7oT_toIWTLNROccQK-sW5A3zTzMSi_2ArsgnJ1hh7rX8XV96seYMInGlw5xQPIELdaJy5QHVPvGwyeZKzB_KYMWAMxlYxwUVbOeeE_X45PJ3FtOJpQ_uMr3QspklYpPFTGlP0JS22wk_L0uItAayol58p3DMfbS1YoZgc17PtTFmNLxjtuiFkUABEhedm_-atbswp4RwJZDWff_ozjMB4oAx2d2Lqyyjk1rNbzzKxEZe2Y4snT0aasoLVNM-O_RRHav_I1vUlZCY2jgLwMRVnBimLxJxxQ7map3UTC0kB4tdNsc_gaiLLpQJpg',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'pageName' => $pageName,
                'visitedAt' => (new DateTimeImmutable())->format('Y-m-d H:i:s'),
            ],
        ]);
    }
    

}