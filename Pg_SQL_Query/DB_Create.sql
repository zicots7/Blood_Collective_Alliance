ALTER TABLE donor_info
ADD COLUMN donorName VARCHAR(50) NOT NULL,
ADD COLUMN donorDob DATE NOT NULL,
ADD COLUMN donorGender VARCHAR(10) NOT NULL,
ADD COLUMN donorBloodGrp VARCHAR(5) NOT NULL,
ADD COLUMN donorMobile INT NOT NULL,
ADD COLUMN donorEmail TEXT NOT NULL,
ADD COLUMN donorpincode VARCHAR(10) NOT NULL,
ADD COLUMN donorState TEXT NOT NULL,
ADD COLUMN donorDistrict TEXT NOT NULL,
ADD COLUMN donorAddress TEXT NOT NULL,
ADD COLUMN donorAltNo INT NOT NULL,
ADD COLUMN donorPassword TEXT NOT NULL;

