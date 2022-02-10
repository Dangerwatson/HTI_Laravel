<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizFontController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ListDeFormationController;
use App\Http\Controllers\AjouterNoteController;
use App\Http\Controllers\LiveTable;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\Auth\RegisterController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
     Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //Route::get('profilee',[AdminController::class,'profile'])->name('admin.profile');
    //Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    
    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

});
//AddProfileUser
Route::get('profile',[AdminController::class, 'use'])->name('');
//addUser
Route::get('ajouterUser',[AdminController::class, 'AddUser'])->name('');


//Partie Users
Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    
});

//appel page index frontend
Route::get('/',[frontendController::class, 'index']);
//appel page backend dashboard
Route::get('/cop',[ClasseController::class, 'co'])->name('');

//appel page classe
Route::get('/Addclasse',[ClasseController::class, 'classeAd'])->name('');
//save classe
Route::post('/add-classe',[ClasseController::class,'addClasse'])->name('add.classe');
Route::get('/listerClasse',[ClasseController::class, 'listeClas'])->name('');
//appel page classe edit
Route::get('edit/{id}',[ClasseController::class, 'editer']);
//save update
Route::put('update-data/{id}',[ClasseController::class, 'update']);




//partie inscription

//appel page classe
Route::get('/addEleves',[InscriptionController::class, 'inscrip'])->name('');
//save inscription
Route::post('/add-eleve',[InscriptionController::class,'insertEl'])->name('add.inscrip');
Route::get('/listerEl',[InscriptionController::class, 'liste'])->name('');

//lister eleves par classe
Route::get('/listerElPcla',[InscriptionController::class, 'listerElevParClasse'])->name('');
Route::get('viewClasse/{name_classe}',[InscriptionController::class, 'vieElevParCl']);
//appel page inscription edit
Route::get('editEl/{id}',[InscriptionController::class, 'editer']);
//save update
Route::put('update.inscrip/{id}',[InscriptionController::class, 'updateSave']);


//upload fichier
Route::get('/addFichier',[FichierController::class, 'uploadFic'])->name('');
Route::post('/saveFic',[FichierController::class, 'storefic']);
Route::get('/download/{file}',[FichierController::class, 'download']);
Route::get('/view/{id}',[FichierController::class, 'view']);



//quiz

Route::get('/quizes',[QuizController::class, 'createw']);
Route::post('/saveExam',[QuizController::class, 'store']);
Route::get('/quiz_status/{id}',[QuizController::class,'status']);
Route::get('/quize/addquestion/{id}',[QuizController::class,'AddQuestion']);

Route::post('/questions',[QuestionController::class,'storequest']);
Route::get('/questionsView',[QuestionController::class,'indexViewQ']);
Route::get('editer/{id}',[QuestionController::class, 'edit']);

//save
Route::put('update-question/{id}',[QuestionController::class, 'update']); 
Route::get('/quizesDetails/{id}',[QuizController::class,'showDetail']);


// frontend
Route::get('/quizF',[frontendController::class, 'quizList']);
Route::get('/exam-start/{id}',[frontendController::class, 'exam']);

Route::get('/MyExamResult',[frontendController::class,'examResult']);
Route::get('/profileF',[frontendController::class,'examResult']);

Route::get('/quiz',[QuizFontController::class,'index']);

//devoir
Route::get('/telDevoir',[frontendController::class, 'Devoir']);
Route::get('/senDevoir',[frontendController::class, 'SenDev']);

Route::post('/saveFicSend',[frontendController::class, 'storeficSend']);

//Route::get('/downloadi/{file}',[FichierController::class, 'download']);
//Route::get('/viewi/{id}',[FichierController::class, 'view']);
//devoir reci
Route::get('/DevoirReci',[frontendController::class, 'DevoirRec']);


//partie cat matiere
Route::get('/addCatM',[MatiereController::class,'catMatiere']);
Route::post('/saveCatM',[MatiereController::class,'addCat_mat']);


//partie cat matiere
Route::get('/addMatiere',[MatiereController::class,'Matiere']); 
Route::post('/saveMatiere',[MatiereController::class,'add_matiere']);
//lister matiere par classe
Route::get('/listerMatPcla',[MatiereController::class, 'listerMatParClasse']);
Route::get('viewMatClasse/{name_classe}',[MatiereController::class, 'vieMatParCl']);
Route::get('editMat/{id}',[MatiereController::class, 'editM']);
//save update
Route::put('update.matiere/{id}',[MatiereController::class, 'updateSave']);


//partie professeur
Route::get('/addProf',[ProfesseurController::class,'Prof']); 
//save 
Route::post('/save.prof',[ProfesseurController::class, 'profSave']);
Route::get('/ProfList',[ProfesseurController::class,'listProf']);
Route::get('/editProf/{id}',[ProfesseurController::class,'EditerProfes']); 
//save update
Route::put('update.prof/{id}',[ProfesseurController::class, 'updatePSave']);


//partie formation
Route::get('/ListDeFormation',[ListDeFormationController::class,'listDf']);



//lister note par classe
Route::get('/AjouterNotPcla',[AjouterNoteController::class, 'addNotParClasse']);
Route::get('viewNotClasse/{name_classe}',[AjouterNoteController::class, 'vieNotParCl']);

Route::get('/listerNotPcla',[AjouterNoteController::class, 'listNotParClasse']);
Route::get('ListeNotClasse/{name_classe}',[AjouterNoteController::class, 'listNotes']);
//partie note
//Route::get('/AjouterNote1',[AjouterNoteController::class,'addNote11']);
//save 
Route::post('/save.note',[AjouterNoteController::class, 'saveNote']);



Route::get('/AjouterNote',[AjouterNoteController::class,'addNote']);
Route::post('tabledit/action', [AjouterNoteController::class,'action'])->name('tabledit.action');



///ore

Route::get('/livetable',[LiveTable::class,'index']);
Route::get('/livetable/fetch_data',[LiveTable::class,'fetch_data']);
Route::post('/livetable/add_data',[LiveTable::class,'add_data'])->name('livetable.add_data');
Route::post('/livetable/update_data',[LiveTable::class,'update_data'])->name('livetable.update_data');
Route::post('/livetable/delete_data',[LiveTable::class,'delete_data'])->name('livetable.delete_data');


Route::get('/ajouterPresence',[PresenceController::class,'addPres']);
Route::get('viewPresClasse/{name_classe}',[PresenceController::class, 'addPresParCl']);
//liste presence par classe
Route::get('/listePresence',[PresenceController::class,'listePres']);
Route::get('viewListPresClasse/{name_classe}',[PresenceController::class, 'ListPresParCl']);
//save 
Route::post('/save.pres',[PresenceController::class, 'savePresence']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


