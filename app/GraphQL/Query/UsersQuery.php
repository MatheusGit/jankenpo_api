<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use App\User;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'UsersQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('user'));
    }

    public function args()
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
			'nickname' => ['name' => 'nickname', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        if(isset($args['id']))
			{
				return User::where('id' , $args['id'])->get();
			}
			else if(isset($args['nickname']))
			{
				return User::where('nickname', $args['nickname'])->get();
			}
			else
			{
				return User::all();
			}
    }
}