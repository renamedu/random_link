<?php

namespace App\Service;

use App\Models\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LinkService
{
    public function generateLink($url)
    {
        $generated_code = Str::random(32);

        try {
            DB::beginTransaction();
            $link = Link::firstOrCreate(
                ['original_url' =>  $url],
                ['generated_code' => $generated_code]
            );
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $link;
    }
}
