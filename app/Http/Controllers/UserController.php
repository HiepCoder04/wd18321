<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function showUser(){
    //    $listUsers = DB::table('users')->get();
    // return view('list-user',compact('listUsers'));
    //    $result = DB::table('users')->where('id','=','4')->first();
    //    $result = DB::table('users')->find('4');

    //Lấy thuộc tính name của user có id = 16
    // $result = DB::table('users')->where('id','=','16')->value('name');
    
    //Lấy danh sách idUser của phòng ban 
    // $idPhongBan = DB::table('phongban')->where('ten_donvi','like','%Ban giam hieu%')->value('id');
    // $result = DB::table('users')->where('phongban_id',$idPhongBan)->pluck('id');

    //Tìm user có độ tuổi lớn nhất trong công ty
    // $result = DB::table('users')->where('tuoi', DB::table('users')->max('tuoi'))->get();

    //Tìm user có độ tuổi nhỏ nhất trong công ty
    //$result = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();

    //Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
    // $idPhongBan = DB::table('phongban')->where('ten_donvi','like','%Ban giam hieu%')->value('id');
    // $result = DB::table('users')->where('phongban_id',$idPhongBan)->count('id');

    //Lấy danh sách tuổi các user
    // $result = DB::table('users')->distinct()->pluck('tuoi');

    // Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
    // $result = DB::table('users')->where('name','like','%Khải')->orwhere('name','like','%Thanh')->get();

    //Lấy danh sách user ở phòng ban 'Ban đào tạo'
    // $idPhongBan = DB::table('phongban')->where('ten_donvi','like','%Ban đào tạo%')->value('id');
    // $result = DB::table('users')->where('phongban_id',$idPhongBan)->select('id','name')->get();
    
    //Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
    // $result = DB::table('users')->where('tuoi','>=','30')->select('id','name','tuoi')->orderBy('tuoi','asc')->get();

    // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')->select('id','name','tuoi')->orderBy('tuoi','desc')->offset(5)->limit(10)->get();

    //Thêm một user mới vào công ty
    // $data = [
    //     'name' => 'Nguyễn Văn B',
    //     'email' => 'hiepkas@gmail.com',
    //     'phongban_id' => '1',
    //     'songaynghi' => '2',
    //     'tuoi' => '20',
    //     'created_at'=> Carbon::now(),
    //     'updated_at'=> Carbon::now()

    // ];
    // DB::table('users')->insert($data);
    
    //Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
    // $idPhongBan = DB::table('phongban')->where('ten_donvi','like','%Ban đào tạo%')->value('id');
    // $result = DB::table('users')->where('phongban_id',$idPhongBan)->select('id','name')->get();
    // foreach($result as $value){
    //     DB::table('users')->where('id',$value->id)->update([
    //         'name' =>$value->name . ' PĐT'
    //     ]);
    // }

    //Xóa user nghỉ quá 15 ngày
    // DB::table('users')->where('songaynghi','>','15')->delete();
    }
    // public function getUser($id,$user = ''){
    //     echo $id;
    //     echo $user;

    // }
    // public function updateUser(Request $request){
    //     echo $request->id;
    //     echo $request->user;

    // }

    public function listUsers(){
        $listUsers = DB::table('users')
        ->join('phongban','phongban.id','=','users.phongban_id')
        ->select('users.id','users.name','users.email','users.phongban_id',
        'phongban.ten_donvi')
        ->get();
        return view('users/listUsers')->with([
            'listUsers' => $listUsers
        ]);
    }
    public function addUsers(){
        $phongBan = DB::table('phongban')->select('id','ten_donvi')->get();
        return view('users/addUsers')->with([
            'phongBan' => $phongBan
        ]);
    }
    public function addPostUsers(Request $req){
        $data = [
            'name' =>$req->nameUser,
            'email' =>$req->emailUser,
            'phongban_id' =>$req->phongbanUser,
            'tuoi' =>$req->tuoiUser,
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),

        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.listUsers');
    }

    public function deleteUser($idUser){
        DB::table('users')->where('id',$idUser)->delete();
        return redirect()->route('users.listUsers');

    }
    public function test(){
        return view('admin/product/list-product');
    }
}
