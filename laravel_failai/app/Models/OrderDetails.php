<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $order_id
 * @property string $product_name
 * @property int $product_id
 * @property Product $product
 * @property int $quantity
 * @property string $price
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class OrderDetails extends Model
{
    use HasFactory;

    protected $guarded = [
        'status_id',
    ];

    protected $fillable = [
        'order_id',
        'product_name',
        'product_id',
        'quantity',
        'price',
    ];
//$appends savybė apibrėžia, kurie modelio atributai turi būti įtraukti į modelio JSON
// reprezentaciją. Šiuo atveju, modelio JSON reprezentacijoje turėsime ir total_price atributą.
    protected $appends = ['total_price'];

//    boot() metodas yra Laravel modelio gyvavimo ciklo dalis ir jis paleidžiamas, kai modelis yra inicializuojamas.
// Šiame metode yra nustatomas prekybos prekių detalių modelio updating eventas, kuris yra paleidžiamas, kai modelis
// yra atnaujinamas. Šiame evente yra skaičiuojamas total_price atributas pagal dabartinę quantity ir price reikšmes.
    public static function boot()
    {
        parent::boot();

        self::updating(function ($detail) {
            $detail->total_price = $detail->quantity * $detail->price;
        });
    }

//Laravel magiškas metodas, kuris yra naudojamas modelio atributams gauti. Šiame konkrečiame metode yra apibrėžiama,
// kaip total_price atributas turi būti apskaičiuojamas, kai jis yra gautas. Tai yra naudinga, jei norite turėti
// modelio atributus, kurie yra išvestiniai iš kitų modelio atributų, bet nesaugojami duomenų bazėje.
//Visi šie metodai yra naudojami tam, kad total_price atributas būtų prieinamas ir naudojamas lengvai modelio
// objektuose ir JSON reprezentacijose, taip pat būtų automatizuotas total_price skaičiavimas pagal quantity ir price reikšmes.


    public function getTotalPriceAttribute()
    {
        return $this->quantity * $this->price;
    }


    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function __toString(): string
    {
        return $this->product_name;
    }
}
