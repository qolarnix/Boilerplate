<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;

/**
 * Transform User Data
 */
function user_transformer(object $args): array {
    $user_data = [
        'id' => $args->id,
        'email' => $args->email,
        'username' => $args->username
    ];
    return $user_data;
}

/**
 * Create/Update User
 */
function user_create(array $user_data) {
    $user_email = $user_data['email'];

    Manager::table('users')->updateOrInsert(
        ['email' => $user_email],
        $user_data
    );
}

/**
 * Get User By Email
 */
function user_by_email(string $email) {
    $user = Manager::table('users')->where('email', $email)->first();
    return user_transformer($user);
}

/**
 * Get User by Id
 */
function user_by_id(int $id) {
    $user = Manager::table('users')->where('id', $id)->first();
    return user_transformer($user);
}

/**
 * Get Users
 */
function get_users(int $amount = -1) {
    $users = Manager::table('users')->take($amount)->get();
    
    $requested = [];
    foreach($users as $user) {
        $request = user_transformer($user);
        $requested[] = $request;
    }

    return $requested;
}