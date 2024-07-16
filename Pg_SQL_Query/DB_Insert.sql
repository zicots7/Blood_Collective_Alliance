-- Inserting a sample entry into the Customer_Info table
INSERT INTO donor_info (
    donorName,
    donorDob,
    donorGender,
    donorBloodGrp,
    donorMobile,
    donorEmail,
    donorpincode,
    donorState,
    donorDistrict,
    donorAddress,
    donorAltNo,
    donorPassword
) VALUES (
    'John Doe',
    '1990-05-15',
    'Male',
    'AB+',
    1234567890,
    'john.doe@example.com',
    '12345',
    'California',
    'Los Angeles',
    '123 Main St',
    9876543210,
    'password123'
);
