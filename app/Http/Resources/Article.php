<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray ( $request )
    {
//        return parent::toArray($request);
        return [
            'id'         => $this->id,
            'title'      => ucwords( $this->title ),
            'slug'       => $this->slug,
            'content'    => $this->body,
            'created_at' => $this->created_at->diffForHumans(),
            'replies'    => $this->replies
        ];
    }
}
