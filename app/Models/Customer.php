<?php

// ====================
// MODEL: app/Models/Customer.php
// ====================

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    
    protected $table = 'customer_table';
    
    protected $fillable = [
        'name',
        'email', 
        'phone',
        'address',
    ];
    
    public $timestamps = true;
    protected $primaryKey = 'id';
    
    // Validation rules
    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customer_table,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ];
    }
    
    // Update validation rules (for edit)
    public static function updateRules($id)
    {
        return [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:customer_table,email,{$id}",
            'phone' => 'required|string|max:20', 
            'address' => 'required|string|max:500',
        ];
    }
}