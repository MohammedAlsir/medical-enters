
window.onload = function () {
    "use strict";





    // ################## Start All Events For Delete ##############

    // =========== Delete User =======
    $(document).on("click", ".delete-user", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف المستخدم ؟  ",
            "delete-user/",
            this.getAttribute("data-id-for-delete")
        );
    });

  // =========== Delete Category =======
    $(document).on("click", ".delete-category", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف  هذا القسم  ؟ ",
            "delete_category/",
            this.getAttribute("data-id-for-delete")
        );
    });

    // =========== Delete student =======
    $(document).on("click", ".delete-student", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف  هذا الطالب  ؟ ",
            "delete_student/",
            this.getAttribute("data-id-for-delete")
        );
    });

     // =========== Delete Teacher =======
    $(document).on("click", ".delete-teacher", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف  هذا الاستاذ  ؟ ",
            "delete_teacher/",
            this.getAttribute("data-id-for-delete")
        );
    });

    // // =========== Delete Category =======
    // $(document).on("click", ".delete-category", function (event) {
    //     event.preventDefault();

    //     // == Get Category Id ==
    //     let category_id = this.getAttribute("data-id-for-delete");

    //     // == Start Message ConFrim ==
    //     swal({
    //         title: "هل تريد حذف  هذا القسم  ؟  ",
    //         text: "",
    //         icon: "warning",
    //         buttons: true,
    //         dangerMode: true,
    //         dangerModeButton: 'true',
    //     }).then((willDelete) => {

    //         // == Start -- In Status ConFrim == True ==
    //         if (willDelete) {

    //             // == Ajax  jQuery -- Method Get ==
    //             $.get('check-for-delete/' + category_id, function (data, status) {

    //                 // == Start -- Response ==
    //                 if (data.status) {
    //                     // == Message ConFrim ==
    //                     swal({
    //                         title: "قد يوجد اصناف في هذا القسم هل تريد الحذف ؟ ",
    //                         text: "",
    //                         icon: "warning",
    //                         buttons: true,
    //                         dangerMode: true,
    //                         dangerModeButton: 'true',
    //                     }).then((willDelete) => {

    //                         // == Start In Status ConFrim == True ==
    //                         if (willDelete) {

    //                             // == Ajax  jQuery -- Method Get ==
    //                             $.get('delete-category/' + category_id, function (data, status) {

    //                                 if (data.status) {
    //                                     if (data.status == true) {
    //                                         document.querySelector(".delete-data-" + category_id)
    //                                             .remove();
    //                                         successMessage(" تم الحذف بنجاح ");
    //                                     }
    //                                 }

    //                             });

    //                         }
    //                         // == End In Status ConFrim == True ==

    //                     });
    //                 }
    //                 // == End -- Response ==

    //             });

    //         }
    //         // == End -- In Status ConFrim = True ==

    //     });
    //     // == End Message ConFrim ==

    // });


    // =========== Delete Type =======
    $(document).on("click", ".delete-type", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف  هذا الصنف  ؟  ",
            "delete-type/",
            this.getAttribute("data-id-for-delete")
        );
    });



    // =========== Delete Buys =======
    $(document).on("click", ".delete-buys", function (event) {
        event.preventDefault();

        //   =====  call Function Delete By Id ======
        deleteById(
            "هل تريد حذف  هذه المشتريات  ؟  ",
            "delete-buy/",
            this.getAttribute("data-id-for-delete")
        );
    });


    // ################## End All Events For Delete ##############


    // ======================================================================================================


    // ################## Start Success Messages   ##################

    if (document.querySelector('.success-update')) {
        // ===== call success message function ====
        successMessage(document.querySelector('.success-update').getAttribute('data-message'));
    }

    if (document.querySelector('.success-store')) {
        // ===== call success message function ====
        successMessage(document.querySelector('.success-store').getAttribute('data-message'));
    }

    // ################## End Success Messages   ##################


    // =========================================================================================================

    // ################# Start All Diynamic Functions #################

    // ====== function  delete by id =======
    function deleteById(confrim_message, url, attribute_data_id) {
        swal({
            title: confrim_message,
            text: "",
            // icon: "error",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            dangerModeButton: 'true',
        }).then((willDelete) => {

            if (willDelete) {

                $.get(url + attribute_data_id, function (data, status) {
                    if (data.status) {
                        if (data.status == true) {
                            document
                                .querySelector(".delete-data-" + attribute_data_id)
                                .remove();
                            swal("  ... تم الحذف بنجاح ", {
                                icon: "success",
                            });
                        }
                    }
                });

            }
        });
    }


    // ======= function Success Message ======
    function successMessage(data_message) {
        // swal(data_message);
        swal({
            title: data_message,
            icon: "success",
            button: "تم ",
        });
    }

    // ======= function Error Message ======
    function errorMessage(data_message) {
        // swal(data_message);
        swal({
            title: data_message,
            icon: "error",
            button: "تم ",
        });
    }

    // ======= Function Warning Message ======
    function warningMessage(data_message) {
        swal({
            title: data_message,
            icon: "warning",
            button: "تم ",
        });
    }


    // ################# End All Diynamic Functions #################



// let Menu = document.querySelector('.dropdown-menu'),
//     ToggelButton = document.querySelector('.dropdown-toggle');

//     ToggelButton.addEventListener( 'click', function(){
//       Menu.classList.toggle('show');
//     //   Menu.style.top = "10%";
//     });



};
