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
use Illuminate\Http\Request;

Route::get('loginadmin', function () {
    return view('home', ['categories' => Category::all()]);
})->middleware('auth.basic');
Route::get('logout', function () {
    Auth::logout();
    return view('home', ['categories' => Category::all()]);
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
        return back();
    }
    return back();
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
        return view('news', ['newsall' => News::all()]);
    }
    return back();
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
    return view('product2', ['category' => Category::find($cid)]);
});
Route::get('product3', function () {
    return view('product3');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});

Route::get('/lang/set/{lang}', 'LocaleController@setLang');




