@extends('layouts.app')
@section('doctors_open','menu-open')
@section('doctors','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">تعديل بيانات المعمل</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('doctors.update',$item->id)}}" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">اسم الطبيب </label>
                                <div class="col-sm-10">
                                    <input required type="text" value="{{$item->name}}" class="form-control" name="name">
                                </div>
                            </div>


                            {{-- <div class="form-group row">
                                <label class="col-sm-2 control-label">التخصص</label>
                                <div class="col-sm-10">
                                    <input required type="text" name="type" class="form-control">
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">رقم الهاتف</label>
                                <div class="col-sm-10">
                                    <input required type="number" value="{{$item->phone}}"  name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">سعر الكشف</label>
                                <div class="col-sm-10">
                                    <input required type="number" name="price" value="{{$item->price}}"  class="form-control">
                                </div>
                            </div>


                                <!-- /.card-body -->
                            <div class="card-footer" style="border-top: none; margin-bottom: 15px">
                                <h4>ايام العمل </h4>
                            </div>

                            {{-- السبت --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">السبت</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    {{-- {{dd($workTime->where('day','السبت')->pluck('to')->first())}} --}}
                                    <input  type="hidden" class="form-control" value="السبت" name="day[]">
                                    <input  type="time" value="{{$st->where('day','السبت')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$st->where('day','السبت')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاحد --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاحد</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الاحد" name="day[]">
                                    <input  type="time" value="{{$sun->where('day','الاحد')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$sun->where('day','الاحد')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاثنين --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاثنين</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الاثنين" name="day[]">
                                    <input  type="time" value="{{$mon->where('day','الاثنين')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$mon->where('day','الاثنين')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الثلاثاء --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الثلاثاء</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الثلاثاء" name="day[]">
                                    <input  type="time" value="{{$tue->where('day','الثلاثاء')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$tue->where('day','الثلاثاء')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الاربعاء --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الاربعاء</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الاربعاء" name="day[]">
                                    <input  type="time" value="{{$wed->where('day','الاربعاء')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$wed->where('day','الاربعاء')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الخميس --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الخميس</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الخميس" name="day[]">
                                    <input  type="time" value="{{$thu->where('day','الخميس')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$thu->where('day','الخميس')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>

                            {{-- الجمعة --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الجمعة</label>
                                <label class="col-sm-1 control-label">من</label>
                                <div class="col-sm-3">
                                    <input  type="hidden" class="form-control" value="الجمعة" name="day[]">
                                    <input  type="time" value="{{$fri->where('day','الجمعة')->pluck('from')->first()}}" class="form-control" name="from[]">
                                </div>
                                <label class="col-sm-1 control-label">الي</label>
                                <div class="col-sm-3">
                                    <input  type="time" value="{{$fri->where('day','الجمعة')->pluck('to')->first()}}" class="form-control" name="to[]">
                                </div>
                            </div>
                            <div class="m-2">
                                <span style="color: brown">يجب تحديد الوقت من و الي حتي يتم حفظ يوم العمل </span>
                            </div>



                            {{-- <input  type="hidden" name="medical_center_id" value="{{Auth::user()->id}}"> --}}

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-info">تعديل</button>
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


