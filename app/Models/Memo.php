<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    public function getMyMemo(){
        $query_tag = \Request::query('tag');

        $query = Memo::query()->select('memos.*')
                    ->where('user_id', '=', \Auth::id())
                    ->whereNull('deleted_at')
                    ->orderby('updated_at', 'DESC');
            // もしクエリパラメータtagがあれば
            if (!empty($query_tag)) {
                // タグで絞り込み
                $query->leftjoin('memo_tags', 'memo_tags.memo_id', '=', 'memos.id')->where('memo_tags.tag_id', '=', $query_tag);
            }

            $memos = $query->get();

            return $memos;
    }
}
