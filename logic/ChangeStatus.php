<?php
namespace pistol88\order\logic;

class ChangetSatus
{
    public $order;
    public $status;

    public function execute()
    {
        $this->order->setStatus($this->status);
        $this->order->saveData();
        
        return true;
    }
}