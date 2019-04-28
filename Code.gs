function myFunction() {
  var html = HtmlService.createHtmlOutputFromFile('index').setSandboxMode(HtmlService.SandboxMode.IFRAME);
  SpreadsheetApp.getUi().showModalDialog(html, 'Display Sheet Data');
}

function getValuesFromSS(range) {
  var ss = SpreadsheetApp.getActiveSpreadsheet();
  return ss.getRange(range).getValues();
}
