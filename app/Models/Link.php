<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp() {
        $this->move(-1);
    }

    public function moveDown() {
       $this->move(1);
    }

    /**
     * Function responsible for reorder the link
     * 
     * @param int $to +1 for moving down or -1 for moving up
     * @return void
     */
    private function move(int $to) 
    {
        $order = $this->order;
        $newOrder = $order + $to;

        $swapWith = $this->user->links()->where('order', '=', $newOrder)->first();

        $this->fill(['order' => $newOrder])->save();
        $swapWith->fill(['order' => $order])->save();
    }
}
