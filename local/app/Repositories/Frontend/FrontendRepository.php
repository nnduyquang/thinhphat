<?php

namespace App\Repositories\Frontend;



use App\Config;


class FrontendRepository implements FrontendRepositoryInterface
{


    public function getDataConfig()
    {
        $data = [];
        $configs = Config::whereIn('name', ['config-phone', 'config-email', 'config-address','config-contact'])->orderBy('order')->get();
        foreach ($configs as $key => $item) {
            if ($item->name == 'config-phone'){
                $data['config-phone'] = $item->content;
                $data['config-phone-2'] = str_replace('.','',$item->content);
            }
            if ($item->name == 'config-email')
                $data['config-email'] = $item->content;
            if ($item->name == 'config-address')
                $data['config-address'] = $item->content;
            if ($item->name == 'config-contact')
                $data['config-contact'] = $item->content;
        }
        return $data;
    }


}