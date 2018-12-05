<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="js/jquery.js"></script>
    <script src="js/page-handler.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <title>Patient's Name</title>
  </head>
  <body>
    <section class="patient-profile">
      <section class="patient-header">
        <div class="patient-img">
          <img src="assets/users/kodak.jpg" alt="patient's profile image">
        </div>

        <div class="patient-info grid">
          <ul>
            <li id="patient-name">Name:</li>
            <li id="patient-gender">Gender:</li>
            <li id="patient-age">Age:</li>
            <li id="patient-weight">Weight:</li>
            <li id="patient-height">Height:</li>
            <li id="patient-m-status">Maritial Status:</li>
          </ul>
        </div>

        <div class="patient-dashboard-show-control">
          <button type="button" name="dashboard-return">Back to Dashboard</button>
          <button type="button" name="profile-show-full">Full Profile</button>
        </div>
      </section>
    </section>


    <section class="document">
      <div class="alert">
        <div class="alert-indicator">
          <div class="alert-icon">
            <img src="assets/img/caution-sign.svg" alt="caution">
          </div>
          <span class="short-msg">Alert</span>
        </div>
        <p class="alert-msg"></p>
        <div class="alert-close">
          <a class="close">
            <img src="assets/img/close-button.svg" alt="close-button">
          </a>
        </div>
      </div>

      <div class="document-filter grid">
        <span>Documents</span>
        <select class="document-filter-option dropdown" name="Date">
          <option value="asc">Ascending</option>
          <option value="desc">Descending</option>
        </select>
        <select class="document-filter-option dropdown" name="Category">
          <option value="rep">Reports</option>
          <option value="soap">SOAP Notes</option>
          <option value="presc">Prescription</option>
          <option value="cert">Certificate</option>
          <option value="ref">Referral</option>
        </select>
        <input type="text" name="search-documents" placeholder="Type to search...">
      </div>

      <div class="document-loadout">
        <div class="document-new-doc flex">
          <div class="img">
            <span class="new-doc-title">New Document</span>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
