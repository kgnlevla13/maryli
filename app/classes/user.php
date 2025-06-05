<?php

class User {

    public static function Login($data)
    {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_name'] = $data['user_name'];
        $_SESSION['user_rank'] = $data['user_rank'];
        $_SESSION['user_permissions'] = $data['user_permissions'];
        $_SESSION['user_status'] = $data['user_status'];
        $_SESSION['user_image'] = $data['user_image'];
        $_SESSION['user_date'] = $data['user_date'];
    }

    public static function userExist($username, $email = '@@')
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_name = :username || user_email = :email');
        $query->execute([
            'username' => $username,
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function Register($data)
    {
        global $db;
        $query = $db->prepare('INSERT INTO users SET user_name = :username, user_url = :url, user_email = :email, user_password = :password');
        return $query->execute($data);
    }

    public static function Folder($folder,$id)
    {
        global $db;
        $user = $db->from('users')->where('user_id',$id)->first();

        if ($folder == '')
        {
            if (!file_exists('upload/files/users')) {$createUsersFolder = mkdir('upload/files/users/','0777');}

            $folder = uniqid($id) . $id;
            $create = mkdir('upload/files/users/' . $folder,'0777');

            if ($create) 
            {
                $db->update('users')->where('user_id',$id)->set(['user_folder' => $folder ]);
                return $folder;
            }
        }
        elseif ($folder != '' && $folder != 'root' && !file_exists('upload/files/users/'.$folder)) 
        {
            $folder = uniqid($id) . $id;
            $create = mkdir('upload/files/users/' . $folder,'0777');

            if ($create) 
            {
                $db->update('users')->where('user_id',$id)->set(['user_folder' => $folder]);
                return $folder;
            }
        }
        else
        {
            return $user['user_folder'];
        }
    }
}