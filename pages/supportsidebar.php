<!DOCTYPE html>
<html>
  <body>
  <div class="supportside">
  <h1>Search Pref</h1>
  <input type="button" value="View search preferences" id="viewSearchPref">
  <div class = "searchWrap">
    <form name="searchPreferences" id="searchPref">
      <p>Smokes<input type="checkbox" name="Smoker">
      Non-smoker<input type="checkbox" name="non-smoker"></p>
      <h3>Accomodation</h3>
      <p>House<input type="checkbox" name="Accomodation">
      Halls<input type="checkbox" name="Accomodation"></p>
      <h3>Year of study</h3>
      <p>First: <input type="checkbox" name="Year">
      Second: <input type="checkbox" name="Year">
      Third: <input type="checkbox" name="Year">
      Forth: <input type="checkbox" name="Year"></p>
      <p><input type="submit" value="Apply" id="applySearch"></p>
    </form>
  </div>

  <h1>Chat Settings</h1>
  <p><input type="button" value="Block User" id="chatSetBlockBtn"></p>
  <div class="searchWrap">
    <form name="chatSettingsBlock" id="chatSettingsBlock">
      <p>Users Name: <input type="text" id="chatSetUserName"></p>
      <input type="submit" value="Block" id="chatSetBlock"><input type="button" value="Back" id="chatCancelBlock"></p>
    </form>
  </div>
  <p><input type="button" value="Go Offline" id="chatGoOfflineBtn"></p>
</div>
</body>
</html>
