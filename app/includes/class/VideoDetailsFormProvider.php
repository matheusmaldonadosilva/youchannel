<?php

class VideoDetailsFormProvider
{

  private $con;

  public function __construct($con) {
    $this->con = $con;
  }

  public function createUploadForm()
  {
    $fileInput = $this->createFileInput();
    $titleInput = $this->createTitleInput();
    $descriptionInput = $this->createDescriptionInput();
    $categoriesInput = $this->createCategoriesInput();
    $privacyInput = $this->createPrivacyInput();
    $uploadButton = $this->createUploadButton();
    
    return "<form action='processing.php' method='POST'>
              $fileInput
              $titleInput
              $descriptionInput
              $categoriesInput
              $privacyInput
              $uploadButton

            </form";
  }

  private function createFileInput()
  {
    //horewer get informations of upload the video
    return "<div class='form-group-upload'>
              <label>upload your video</label>
              <i class='fa-solid fa-cloud-arrow-up'></i>
              <input type='file' class='form-control-file' id='formControlFile' required>
            </div>";
  }

  private function createTitleInput()
  {

    return "<div class='form-group-inputs'>
              <input type='text' class='form-control-text' id='formControlText' placeholder='Title' name='titleInput'>
           </div>";

  }

  private function createDescriptionInput()
  {

    return "<div class='form-group-textarea'>
              <textarea class='form-control-textarea' id='formControlArea' placeholder='Description' name='titleInput'></textarea>
           </div>";

  }

  private function createPrivacyInput()
  {

    return "<div class='form-group-privacy'>

              <select class='form-control-select' name='privacyInput'>
                <option value='0'>Private</option>
                <option valeu='1'>Public</option>
              </select>

            </div>";

  }

  private function createCategoriesInput() {

    $query = $this->con->prepare("SELECT * FROM categories");
    $query->execute();

    $html = "<div class='form-group-categories'> <select class='form-control-select' name='categoryInput'>";


    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $id = $row['id'];
      $name = $row['name'];

      $html .= "<option value='$id'>$name</option>";

    }

    $html .= "</select>
              </div>";


    return $html;          
  }

  private function createUploadButton() {
    return "<button type='submit' class='uploadButton' name='uploadButton'>Upload</button>";
  }

}

?>