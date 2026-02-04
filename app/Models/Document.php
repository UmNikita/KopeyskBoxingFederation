<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DocumentType;

class Document extends Model
{
    public function document_type() {
        return $this->belongsTo(DocumentType::class, "document_type_id");
    }

    public static function getSortedData() {
        $documents = self::with("document_type")->get();
        $documents_sorted = [];
        foreach ($documents as $document) {
            $documents_sorted[$document->document_type->name][] = $document->name;
        }
        return $documents_sorted;
    }
}
