<?php

namespace Tests\Integration\Permission;

use Illuminate\Http\Response;
use src\Applications\Http\Enum\ErrorCodes\PermissionErrorCode;
use Tests\Integration\TestCase;
use Faker\Factory as Faker;

class PermissionInfoTest extends TestCase
{
    private string $endpoint = '/api/permission.info';

    /**
     * @test
     */
    public function callPermissionInfoEndpointWithValidData_ExpectOkResponse()
    {
        // Arrange
        $listResponse = $this->json('GET', '/api/permission.list');

        // Get first permission from the list
        $permission = $listResponse->json('data.0');

        $data = [
            'identifier' => $permission['identifier'],
        ];

        // Act
        $response = $this->json('POST', $this->endpoint, $data);

        // Assert
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'identifier' => $permission['identifier'],
            'name'       => $permission['name']
        ]);
    }
}
