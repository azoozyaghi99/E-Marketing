<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $data['user'] = $user;

        $token = $user->createToken('api_user')->accessToken;
        $data['token'] = $token;

        return response([
            'status' => true,
            'message' => 'تم تسجيل المستخدم بنجاح',
            'data' => $data
        ]);
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return response([
                'status' => false,
                'message' => 'يرجي التحقق من البيانات المدخلة',
            ]);
        }
        $user = User::where('email',$request->email)->first();
        $tokenResult = $user->createToken('api_client');
        $token = $tokenResult->token;
        $token->save();
        $data['user'] = $user;
        $data['token'] = $tokenResult;
        return response([
            'status' => true,
            'message' => 'تم تسجيل الدخول بنجاح',
            'data' => $data
        ]);
    }

    /**
     * Get User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_user(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $tokenResult = $user->createToken('Aljazyah');
            $token = $tokenResult->token;
            $token->save();
            $data['user'] = $user;
            $data['token'] = $tokenResult->accessToken;
            $data['token_type'] = 'Bearer';
            $data['expires_at'] = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
            return response([
                'status' => true,
                'message' => 'تم جلب البيانات بنجاح',
                'data' => $data
            ]);
        } else {
            return response([
                'status' => false,
                'message' => 'حدثت مشكلة اثناء جلب البيانات',
                'data' => null
            ]);
        }
    }

    /**
     * Change User Password.
     *
     * @param  \App\Http\Requests\Auth\ChangePasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function change_password_by_auth(ChangePasswordAuthRequest $request){
        $user = Auth::user();
        if (!Hash::check($request->old_password, $user->password)) {
            return response([
                'status' => false,
                'message' => 'كلمة المرور القديمة خطأ',
                'data' => null
            ]);
        }
        if (Hash::check($request->password, $user->password)) {
            return response([
                'status' => false,
                'message' => 'كلمة المرور الجديدة نفس القديمة',
                'data' => null
            ]);
        }
        $user->password = $request->password;
        $user->save();
        $data['user'] = $user;
        return response([
            'status' => true,
            'message' => 'تم تغير كلمة المرور بنجاح',
            'data' => $data
        ]);
    }

    /**
     * Update User.
     *
     * @param  \App\Http\Requests\Auth\UpdateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_user(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $u = $user->update($request->only(['name','email']));
        if ($u) {
            $tokenResult = $user->createToken('Store');
            $token = $tokenResult->token;
            $token->save();
            $data['user'] = $user;
            $data['token'] = $tokenResult->accessToken;
            $data['token_type'] = 'Bearer';
            $data['expires_at'] = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
            return response([
                'status' => true,
                'message' => 'تم تعديل البيانات',
                'data' => $data
            ]);
        } else {
            return response([
                'status' => false,
                'message' => 'حدثت مشكلة اثناء تعديل البيانات',
                'data' => null
            ]);
        }
    }

    /**
     * Logout User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = Auth::user();
        $accessToken = $user->token();
        $accessToken->revoke();
        return response([
            'status' => true,
            'message' => 'تم تسجيل الخروج بنجاح',
            'data' => null
        ]);
    }
}
