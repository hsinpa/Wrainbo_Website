<?php namespace App\Http\Controllers\CMS;
use App\Http\Controllers\Controller;
use App\Model\CMSUserModel;
use App\Model\CMSEditorModel;
use Validator;


use App\Model\Utility;
use Illuminate\Http\Request;

class CMSSpellEditorCtrl extends Controller {

  function __construct( CMSUserModel $user ) {
    $this->_user = $user;
  }

  public function LoadPage() {
    $user_id = $this->_user->GetUserID(session('cms.token'));
    $user_data = $this->_user->GetUserData(session('cms.token'));

    return view('cms.spellEditor.spellEditor',
      ['title' => 'Spell Editor',
        "page"=>"spellEditor",
        "user_name" => $user_data->name,
        "user_id" => $user_data->_id]);
  }
}