<?php

namespace ZfcBase\Db\Adapter;

interface MasterSlaveAdapterInterface
{
    /**
     * @return Laminas\Db\Adapter
     */
    public function getSlaveAdapter();
}
