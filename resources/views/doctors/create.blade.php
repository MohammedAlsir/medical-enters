@extends('layouts.app')
@section('doctors_open','menu-open')
@section('doctors','active')
@section('doctors_create','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">
                        <img src="{{asset('uploads/medical_doctor.png')}}" class="image-title-card" alt="medical_doctor">
                            إضافة طبيب جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('doctors.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم الطبيب </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">المركز الطبي</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select required name="medical_center_id"  class="form-control">
                                        <option value="">اختر المركز الطبي</option>
                                        @foreach ($medical_centers as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">التخصص</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select required name="specialtie_id"  class="form-control">
                                        <option value="">اختر التخصص</option>
                                        @foreach ($specialties as $item)
                                            <option value="{{$item->id}}">{{$item->specialtie_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">رقم الهاتف</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="number" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">سعر الكشف</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="number" name="price" class="form-control">
                                </div>
                            </div>


                                <!-- /.card-body -->
                            <div class="card-footer" style="border-top: none; margin-bottom: 15px">
                                <h6>
                                    <i class="fa fa-calendar-alt fa-lg" style="color: #007bff;"></i>
                                    <span>ايام العمل</span>
                                 </h6>
                            </div>

                            {{-- السبت --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">السبت</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" value="السبت" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاحد --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاحد</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden"  value="الاحد" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاثنين --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاثنين</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden"  value="الاثنين" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الثلاثاء --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الثلاثاء</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" value="الثلاثاء" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاربعاء --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاربعاء</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden"  value="الاربعاء" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الخميس --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الخميس</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden"  value="الخميس" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الجمعة --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الجمعة</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden"  value="الجمعة" name="day[]">
                                    <input  type="time" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" class="form-control" name="to[]">
                                </div>
                            </div>
                            <div class="m-2">
                                <span style="color: brown">يجب تحديد الوقت من و الي حتي يتم حفظ يوم العمل </span>
                            </div>



                            {{-- <input  type="hidden" name="medical_center_id" value="{{Auth::user()->id}}"> --}}

                            <!-- /.card-body -->
                            <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>إضـــافة</span>
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                            <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection


