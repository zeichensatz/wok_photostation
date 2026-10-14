Beim Update von TYPO3 12 zu TYPO3 13 muss einmalig die Datenbank geändert werden:
UPDATE tt_content 
SET CType = 'wokphotostation_albumdisplay', list_type = '' 
WHERE CType = 'list' AND list_type = 'wokphotostation_albumdisplay';
