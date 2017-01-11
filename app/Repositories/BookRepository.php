<?php

namespace App\Repositories;

use App\Models\Book;
use InfyOm\Generator\Common\BaseRepository;

class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'author',
        'year'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
