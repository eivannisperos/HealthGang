<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.js"></script>
    <script src="js/page-handler.js"></script>
    <title>Patient's Name</title>
  </head>
  <body>
    <section class="patient-profile">
      <section class="patient-header default-padding flex">
        <div class="patient-img"></div>

        <div class="patient-info">
          <ul class="patient-info-grid grid">
            <li class="label">Name:</li><span id="patient-name" class="patient-detail">Bill Kapri</span>
            <li class="label">Gender:</li><span id="patient-gender" class="patient-detail">Male</span>
            <li class="label">Age:</li><span id="patient-age" class="patient-detail">21</span>
            <li class="label">Weight:</li><span id="patient-weight" class="patient-detail">66kg</span>
            <li class="label">Height:</li><span id="patient-height" class="patient-detail">5'7</span>
            <li class="label">Maritial Status:</li><span id="patient-m-status" class="patient-detail">Single</span>
          </ul>
        </div>

        <div class="patient-dashboard-show-control flex-column">
          <button type="button" name="dashboard-return">Back to Dashboard</button>
          <button type="button" name="profile-show-full">Full Profile</button>
        </div>
      </section>
    </section>


    <section class="document default-padding">
      <div class="alert flex">
        <div class="alert-indicator flex">
          <div class="alert-icon">
            <img src="assets/img/caution-sign.svg" alt="caution">
          </div>
          <span class="short-msg">Alert</span>
        </div>
        <p class="alert-msg">Bill Kapri had open chest surgery on 29/Sep/2018, please proceed with low intensity treatments.</p>
        <div class="alert-close">
          <a class="close">
            <img src="assets/img/close-button.svg" alt="close-button">
          </a>
        </div>
      </div>

      <div class="document-filter grid">
        <span>Documents</span>

        <div class="document-dropdowns dropdown-container flex">
          <select id="date-select" class="document-filter-option dropdown" name="Date">
            <option value="" disabled selected>Date</option>
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
          </select>
          <select id="category-select" class="document-filter-option dropdown" name="Category">
            <option value="" disabled selected>Category</option>
            <option value="rep">Reports</option>
            <option value="soap">SOAP Notes</option>
            <option value="presc">Prescription</option>
            <option value="cert">Certificate</option>
            <option value="ref">Referral</option>
          </select>
          <input type="text" name="search-documents" placeholder="Type to search...">
        </div>
      </div>

      <div class="document-loadout grid">
        <div class="doc document-new-doc flex">
          <div class="doc-title-container flex-column">
            <div class="doc-add-img">
              <img src="assets/img/add-button-inside-black-circle.svg" alt="add document image">
            </div>
            <span class="new-doc-title">New Document</span>
          </div>
        </div>

        <div class="doc document-new-doc flex">
          <div class="doc-title-container flex-column">
            <div class="doc-add-img">
              <img src="assets/img/add-button-inside-black-circle.svg" alt="add document image">
            </div>
            <span class="new-doc-title">New Document</span>
          </div>
        </div>

        <div class="doc document-new-doc flex">
          <div class="doc-title-container flex-column">
            <div class="doc-add-img">
              <img src="assets/img/add-button-inside-black-circle.svg" alt="add document image">
            </div>
            <span class="new-doc-title">New Document</span>
          </div>
        </div>

        <div class="doc document-new-doc flex">
          <div class="doc-title-container flex-column">
            <div class="doc-add-img">
              <img src="assets/img/add-button-inside-black-circle.svg" alt="add document image">
            </div>
            <span class="new-doc-title">New Document</span>
          </div>
        </div>

        <div class="doc document-new-doc flex">
          <div class="doc-title-container flex-column">
            <div class="doc-add-img">
              <img src="assets/img/add-button-inside-black-circle.svg" alt="add document image">
            </div>
            <span class="new-doc-title">New Document</span>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
