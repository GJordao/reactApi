<?php
class Posts
{
    public function __construct()
    {
    }
    // Fetch social networks from DB
    public function get()
    {
        $res = select_query_assoc(
            'SELECT * FROM posts;'
        );
        if (!empty($res)) {
            return json_encode($res);
        }
        else {
            return null;
        }
    }

    public function add($values)
    {
        $json = json_decode($values[0], true);
        $title = $json['title'];
        $content = $json['content'];
        $name = $json['name'];
        $datePosted = $json['date'];
        $res = execute_query(
            "INSERT INTO posts VALUES (title = '$title', content = '$content', name = '$name', datePosted = '$datePosted')"
        );
        return json_encode($res);
    }

    public function update($values)
    {
        $json = json_decode($values[0], true);
        $id = $json['id'];
        $title = $json['title'];
        $content = $json['content'];
        $res = execute_query(
            "UPDATE posts SET title = '$title', content = '$content' WHERE id = '$id'"
        );
        return json_encode($res);
    }

    public function remove($values)
    {
        $id = $values[0];
        $res = execute_query(
            "DELETE FROM posts WHERE id = '$id'"
        );
        return json_encode($res);
    }
}

?>