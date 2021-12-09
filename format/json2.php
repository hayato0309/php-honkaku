<body>
    <?php
    class Novel
    {
        public $title;
        public $auther;
        public function __construct($title, $auther)
        {
            $this->title = $title;
            $this->auther = $auther;
        }
    }

    $novels = [
        new Novel('斜陽', '太宰治'),
        new Novel('The Catcher in the Rye', 'Jerome David Salinger')
    ];
    echo json_encode($novels);
    ?>
</body>