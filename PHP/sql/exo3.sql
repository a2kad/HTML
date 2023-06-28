USE webDevelopment;
ALTER TABLE languages 
ADD versions VARCHAR(255);
ALTER TABLE frameworks 
ADD version INT;
ALTER TABLE languages 
CHANGE versions version VARCHAR(255);
ALTER TABLE frameworks 
CHANGE name framework VARCHAR(255);
ALTER TABLE frameworks 
MODIFY version VARCHAR(10);
USE codex;
ALTER TABLE clients
DROP secondPhoneNumber;
ALTER TABLE clients
CHANGE firstPhoneNumber phoneNumber INT;
ALTER TABLE clients
MODIFY phoneNumber VARCHAR(255);
ALTER TABLE clients
ADD zipCode VARCHAR(255); 
ALTER TABLE clients
ADD city VARCHAR(255);