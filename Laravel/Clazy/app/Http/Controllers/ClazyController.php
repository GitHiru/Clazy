<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clazy;//(追加) DB接続


class ClazyController extends Controller
{
    // demo追加 *****************************************************************
    public function index()
    {
        return 'Hello World';
    }


    // ログイン機能 **************************************************************
     // dear Mau
     // ログイン機能を実施。

// APIだから後で
//  /**
//      * Redirect the user to the GitHub authentication page.
//      *
//      * @return Response
//      */
//     public function redirectToProvider($provider)
//     {
//         // ユーザーをSNS認証エンドポイントへリダイレクト
//         return \Socialite::driver($provider)->redirect();
//     }

//     /**
//      * Obtain the user information
//      *
//      * @return Response
//      */
//     public function handleProviderCallback(\App\SocialAccountsService $accountService, $provider)
//     {

//         try {
//             $user = \Socialite::with($provider)->user();
//         } catch (\Exception $e) {
//             return redirect('/login');
//         }

//         $authUser = $accountService->findOrCreate(
//             $user,
//             $provider
//         );

//         auth()->login($authUser, true);

//         return redirect()->to('/home');
//     }
// }







    // 入力機能  *****************************************************************
    // dear Hiroto
    // 恐らく複数のメソッドが予想されるよ！

public function create()
    {
        // views/diaries/create.blade.phpを表示する
        return view('sp.calcu');
    }









    // 出力機能  *****************************************************************
    // User毎にWeek＋Monthデータを取得＋chart.jsに配列渡し。

    public function chartData()
    {
        return 'Helloword';
        //①DBからデータを取得
        $payments = Clazy::all();
        // $diaries = Diary::('id', 'paymenrt')->get();
        dd($payments);

        //②データを整形しViewに返す
        return view('pc.dashboard');
    }


}
