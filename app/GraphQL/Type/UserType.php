<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\User;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'UserType',
        'description' => 'A type',
        'model' => User::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user',
                'alias' => 'user_id', // Use 'alias', if the database column is different from the type name
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of user',
            ],
            'nickname' => [
                'type' => Type::string(),
                'description' => 'The nickname of user',
            ],
            'password' => [
                'type' => Type::string(),
                'description' => 'The password of user',
            ],
        ];
    }
}