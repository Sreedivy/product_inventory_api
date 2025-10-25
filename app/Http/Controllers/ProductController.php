[11:24 PM, 10/24/2025] Sree Divya: <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Default test route
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// Get all products
Route::get('/products', function () {
    return App\Models\Product::all();
});

// Add a product
Route::post('/products', function (Request $request) {
    $product = new App\Models\Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->save();

    return response()->json(['message' => 'Product created successfully']);
});
[11:42 PM, 10/24/2025] Sree Divya: <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // ✅ Get all products
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // ✅ Create a new product
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    // ✅ Get a single product
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product, 200);
    }

    // ✅ Update product
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update($request->all());
        return response()->json($product, 200);
    }

    // ✅ Delete product
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 204);
    }
}