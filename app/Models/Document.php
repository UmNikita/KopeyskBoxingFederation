<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DocumentType;

class Document extends Model
{
    protected $fillable = ['name', 'document_type_id', 'document_root'];

    public function document_type() {
        return $this->belongsTo(DocumentType::class, "document_type_id");
    }

    public static function getSortedData() {
        $documents = self::with("document_type")->get();
        $documents_sorted = [];
        foreach ($documents as $document) {
            $documents_sorted[$document->document_type->name][] = [
                'name'=>$document->name, 'url'=>$document->document_root
            ];
        }
        return $documents_sorted;
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
