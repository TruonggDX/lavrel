<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public $timestamp = false;
    protected $fillable = ['idCustomer','Address','Payment','Voucher','PhoneNumber','CustomerName','ReceiveDate','created_at','Status','TotalBill'];

    // định nghĩa mảng $fillable trong một model Eloquent trong Laravel.

    // Mảng này định nghĩa các cột có thể được quản lý mass assignment trong model. Nghĩa là các cột này có thể được gán giá trị hàng loạt thông qua phương thức create() hay update() mà không cần phải gán từng cột một.

    // Các cột được định nghĩa trong mảng này bao gồm:

    // idCustomer: Khóa chính
    // Address: Địa chỉ
    // Payment: Phương thức thanh toán
    // Voucher: Mã giảm giá
    // PhoneNumber: Số điện thoại
    // CustomerName: Tên khách hàng
    // ReceiveDate: Ngày nhận hàng
    // created_at: Ngày tạo
    // Status: Trạng thái
    // TotalBill: Tổng hóa đơn

    protected $primaryKey = 'idBill';
    protected $table = 'bill';
}
