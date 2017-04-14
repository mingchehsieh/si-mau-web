<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\News;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

Route::get('search', function (Request $request) {
    return view('search', ['products' => Product::whereTranslationLike('name', '%'.$request->key.'%')->get(), 'key' => $request->key]);
});

Route::get('loginadmin', function () {
    return redirect('/');
})->middleware('auth.basic');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::post('addcategory', function (Request $request) {
   if ($request->homecol != 0) {
        $old_col = Category::where('home_col', $request->homecol)->first();
        $old_col->home_col = 0;
        $old_col->save();
    }

    if ($request->id == 0) {
        $category = new Category;
    } else {
        $category = Category::find($request->id);
    }

    $category->home_col = $request->homecol;
    $category->{'name:zh-TW'} = $request->categoryname;
    if (!empty($request->addzhcn)) {
        $category->{'name:zh-CN'} = $request->zhcncategoryname;
    }
    if (!empty($request->addja)) {
        $category->{'name:ja'} = $request->jacategoryname;
    }
    if (!empty($request->adden)) {
        $category->{'name:en'} = $request->encategoryname;
    }
    if ($request->hasFile('uploadimage')) {
        $filename = $request->uploadimage->store('/');
        $category->{'image:zh-TW'} = $filename;
    }
    $category->save();
    return back();
});
Route::get('rmcategory/{id}', function ($id) {
    if (Auth::check()) {
        App\Category::destroy($id);
        return redirect('product');
    } else {
        return back();
    }
});
Route::post('addnews', function (Request $request) {
    if ($request->id == 0) {
        $news = new News;
    } else {
        $news = News::find($request->id);
    }
    $news->{'title:zh-TW'} = $request->newstitle;
    $news->{'text:zh-TW'} = $request->newstext;

    if (!empty($request->addzhcn)) {
        $news->{'title:zh-CN'} = $request->zhcnnewstitle;
        $news->{'text:zh-CN'} = $request->zhcnnewstext;
    }
    if (!empty($request->addja)) {
        $news->{'title:ja'} = $request->janewstitle;
        $news->{'text:ja'} = $request->janewstext;
    }
    if (!empty($request->adden)) {
        $news->{'title:en'} = $request->ennewstitle;
        $news->{'text:en'} = $request->ennewstext;
    }
    if ($request->hasFile('uploadimage')) {
        $filename = $request->uploadimage->store('/');
        $news->{'image:zh-TW'} = $filename;
    }
    $news->save();
    return back();
});
Route::get('rmnews/{id}', function ($id) {
    if (Auth::check()) {
        App\News::destroy($id);
        return redirect('news');
    } else {
        return back();
    }
});
Route::post('addproduct', function (Request $request) {
    if ($request->id == 0) {
        $product = new Product;
    } else {
        $product = Product::find($request->id);
    }
    $product->category_id = $request->cid;
    $product->{'name:zh-TW'} = $request->productname;
    $product->{'text:zh-TW'} = $request->producttext;
    if (empty($request->email)) {
        $product->{'email:zh-TW'} = 'info@ximos.net';
    } else {
        $product->{'email:zh-TW'} = $request->email;
    }

    if (!empty($request->addzhcn)) {
        $product->{'name:zh-CN'} = $request->zhcnproductname;
        $product->{'text:zh-CN'} = $request->zhcnproducttext;
    }
    if (!empty($request->addja)) {
        $product->{'name:ja'} = $request->japroductname;
        $product->{'text:ja'} = $request->japroducttext;
    }
    if (!empty($request->adden)) {
        $product->{'name:en'} = $request->enproductname;
        $product->{'text:en'} = $request->enproducttext;
    }
    if ($request->hasFile('uploadpdf')) {
        $filename = $request->uploadpdf->store('/');
        $product->{'pdf:zh-TW'} = $filename;
    }
    if ($request->hasFile('uploadimage')) {
        $filename = $request->uploadimage->store('/');
        $product->{'image:zh-TW'} = $filename;
    }
    $product->save();
    return back();
});
Route::get('rmproduct/{id}', function ($id) {
    if (Auth::check()) {
        $cid = App\Product::find($id)->category_id;
        App\Product::destroy($id);
        return redirect('product/'.$cid);
    } else {
        return back();
    }

});
Route::get('/', function () {
    return view('home', ['categories' => Category::all()]);
});
Route::get('news', function () {
    return view('news', ['newsall' => News::all()]);
});
Route::get('news/{id}', function ($id) {
    return view('news2', ['news' => News::find($id)]);
});
Route::get('product', function () {
    return view('product', ['categories' => Category::all()]);
});
Route::get('product/{cid}', function ($cid) {
    return view('product2', ['category' => Category::find($cid), 'products' => Product::where('category_id', $cid)->get()]);
});
Route::get('product/{cid}/{id}', function ($cid, $id) {
    return view('product3', ['category' => Category::find($cid), 'product' => Product::find($id)]);
});

Route::get('contact/{pid?}/{email?}', function ($pid = null, $email = 'info@ximos.net') {
    $productname = '';
    if ($pid !== null) {
        $productname = Product::find($pid)->{'name:'.App::getLocale()};
    }
    return view('contact', ['productname' => $productname, 'email' => $email]);
});
Route::get('about', function () {
    return view('about');
});

Route::get('/lang/set/{lang}', 'LocaleController@setLang');




