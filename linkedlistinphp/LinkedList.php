<?php

class ListNode
{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    //insertion at the start of linklist
    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if ($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }


    //displaying all nodes of linklist
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        foreach ($listData as $v) {
            echo $v . " ";
        }
    }

}
$a=new LinkList();
$a->insertFirst(6);
$a->insertFirst(5);
$a->insertFirst(34);
$a->insertFirst(74);
$a->readList();

