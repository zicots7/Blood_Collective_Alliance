CREATE TABLE donor_info(
	donorId SERIAL PRIMARY KEY,
	donorName VARCHAR(50) NOT NULL,
	donorDob DATE NOT NULL,
	donorGender VARCHAR(10) NOT NULL,
	donorBloodGrp VARCHAR(5) NOT NULL,
	donorMobile INT NOT NULL,
	donorEmail TEXT NOT NULL,
	donorpincode VARCHAR(10) NOT NULL,
	donorState TEXT NOT NULL,
	donorDistrict TEXT NOT NULL,
	donorAddress TEXT NOT NULL,
	donorAltNo INT NOT NULL,
	donorPassword TEXT NOT NULL
);
