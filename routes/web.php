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

<<<<<<< HEAD
Route::get('/', function () {
    return view('dashboard.admin.index');
});
Route::get('api/courses', 'coursesAPIController@courses');
=======
Route::get('instructor/{id}', function (){
    return view('instructor.dashboard');
});

Route::get('api/courses','coursesAPIController@courses');
>>>>>>> f07a435c00bbc8ecaef214ce035a4c4c4e5e0ec9
/*Route::get('add','coursesController@addCourse');
Route::post('add','coursesController@processAddCourse');*/
Route::get('courses', 'coursesController@courses');
Route::get('coursescategories', 'coursesController@getCategories');
Route::get('coursescategories/{status?}', 'coursesController@getCategoriesByStatus');
Route::get('coursescategoriesById/{id?}', 'coursesController@getCategoriesByCreatorId');

Route::get('user', 'coursesController@viewallCatrgories');

/** Users routs */
Route::get('users', 'usersController@addUser');
Route::post('users', 'usersController@processAddUser');
Route::get('deleteuser/{id?}', 'usersController@deleteUser');
Route::get('getusers', 'usersController@getUsers');
Route::get('getuser/{id?}', 'usersController@getUser');
Route::get('getuserByGroup/{group_id?}', 'usersController@getUsersByGroup');
Route::get('getuserByStatus/{status?}', 'usersController@getUsersByActiveStatus');
Route::get('searchuser/{keyword?}', 'usersController@searchUsers');
Route::get('updateUser/{id?}', 'usersController@updateUser');
Route::post('updateuser', 'usersController@processupdateuser');
Route::get('updateUserPassword/{id?}', 'usersController@updateUserPassword');
Route::post('updateUserPassword', 'usersController@processupdateUserPassword');
/***********************************************************/
/** courses lessons routs */
Route::get('lesson/{id?}', 'InstructorLessonController@getLessonsByCourseId');
Route::get('addLesson/{course_id?}', 'InstructorLessonController@addLesson');
Route::post('addlesson', 'InstructorLessonController@processaddLesson');
Route::get('updateLesson/{lesson_id}', 'InstructorLessonController@updateLesson');
Route::post('updatelesson', 'InstructorLessonController@processupdateLesson');
Route::get('DeleteLesson/{id?}', 'InstructorLessonController@deleteLesson');
/***********************************************************/
/** userGroup routs */
Route::get('addusergroup', 'usersGroupController@addUserGroup');
Route::post('addusergroup', 'usersGroupController@processAddUserGroup');
Route::get('updateusergroup/{id?}', 'usersGroupController@updateUserGroup');
Route::post('updateusergroup', 'usersGroupController@processupdateUserGroup');
Route::get('deleteusergroup/{id?}', 'usersGroupController@deleteUserGroup');
Route::get('getAllGroups', 'usersGroupController@getAllGroups');
Route::get('getGroupById/{id?}', 'usersGroupController@getGroupById');

/** Courses CATEGORY routs */

Route::get('addCategory', 'courseCategoryController@addCategory');
Route::post('addcategory', 'courseCategoryController@processAddCategory');
Route::get('updateCategory/{id?}', 'courseCategoryController@updateCategory');
Route::post('updateCategory', 'courseCategoryController@processupdateCategory');
Route::get('deleteCategory/{id?}', 'courseCategoryController@deleteCategory');
Route::get('getCategories', 'courseCategoryController@getCategories');
Route::get('getCategory/{id?}', 'courseCategoryController@getCategory');
Route::get('getCategoriesByStatus/{status?}', 'courseCategoryController@getCategoriesByStatus');
Route::get('getCategoriesByCreatorId/{creator_id?}', 'courseCategoryController@getCategoriesByCreatorId');

//finished by alaa ebrahim at 7/4/2018
/***********************************************************/
/** Courses courses routs */

<<<<<<< HEAD
Route::get('addCourse', 'courseController@addCourse');
Route::post('addcourse', 'courseController@processAddCourse');
Route::get('updateCategory/{id?}', 'courseCategoryController@updateCategory');
Route::post('updateCategory', 'courseCategoryController@processupdateCategory');
Route::get('deleteCourse/{id?}', 'courseController@deleteCourse');
Route::get('getCourses', 'courseController@getCourses');
Route::get('getCourses/{id?}', 'courseController@getCoursesByInstructor');
Route::get('getCoursesByCategory/{id?}', 'courseController@getCoursesByCategory');
Route::get('getCoursesByStudentId/{id?}', 'courseController@getCoursesByStudentId');
Route::get('getCoursesByActiveStatus/{id?}', 'courseController@getCoursesByActiveStatus');
Route::get('searchCourses/{id?}', 'courseController@searchCourses');
Route::get('getCourse/{id?}', 'courseController@getCourse');
=======
Route::get('courses/create','courseController@addCourse');
Route::post('courses/create','courseController@processAddCourse');
Route::get('updateCategory/{id?}','courseCategoryController@updateCategory');
Route::post('updateCategory','courseCategoryController@processupdateCategory');
Route::get('deleteCourse/{id?}','courseController@deleteCourse');
Route::get('getCourses','courseController@getCourses');
Route::get('getCourses/{id?}','courseController@getCoursesByInstructor');
Route::get('getCoursesByCategory/{id?}','courseController@getCoursesByCategory');
Route::get('getCoursesByStudentId/{id?}','courseController@getCoursesByStudentId');
Route::get('getCoursesByActiveStatus/{id?}','courseController@getCoursesByActiveStatus');
Route::get('searchCourses/{id?}','courseController@searchCourses');
Route::get('getCourse/{id?}','courseController@getCourse');

>>>>>>> f07a435c00bbc8ecaef214ce035a4c4c4e5e0ec9


//finished by alaa ebrahim at 7/4/2018
/***********************************************************/

// Course Students Routes by hamad adel
Route::get('subscription/add', 'coursesStudentsController@addStudentSubscription');
Route::post('subscription/add', 'coursesStudentsController@insertSubscription');
Route::get('subscription/all', 'coursesStudentsController@getAllSubscription');
Route::get('subscription/approve/{id}', 'coursesStudentsController@approveSubscription');
Route::get('subscription/unapprove/{id}', 'coursesStudentsController@unApproveSubscription');
Route::get('subscription/delete/{id}', 'coursesStudentsController@deleteSubscription');
Route::get('student/{id}', 'coursesStudentsController@getStudentSubscription');
