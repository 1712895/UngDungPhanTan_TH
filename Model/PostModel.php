<?php


class PostModel
{
    public $header;
    public $detail;
    public $id_User;
    public $date_created;
    public $categories;
    public $Tags;
    public $like;
    public $unlike;
    function __construct()
    {
        $this->header = "";
        $this->detail = "";
        $this->id_User = "";
        $this->date_created = "";
        $this->categories = "";
        $this->Tags = "";
        $this->like = "";
        $this->unlike = "";
    }
    public static function listAll() {
        $db = connect();
        $result = $db->Post->find();
        return $result;
    }

}

/*var_dump(PostModel::listAll());*/
?>