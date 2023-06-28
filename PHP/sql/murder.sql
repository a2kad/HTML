select * from crime_scene_report
where city='SQL City' and type = 'murder'

Security footage shows that there were 2 witnesses. The first witness lives at the last house on "Northwestern Dr". The second witness, named Annabel, lives somewhere on "Franklin Ave".

20180115

select * from interview

select * from person
where address_street_name='Franklin Ave'


Annabel Miller id 16371

select * from interview
where person_id = 16371

	I saw the murder happen, and I recognized the killer from my gym when I was working out last week on January the 9th.
	
select * from get_fit_now_member
where name='Annabel Miller'

id 90081

select * from get_fit_now_check_in
where check_in_date=20180109

select * from get_fit_now_check_in
where check_in_date=20180109 and check_out_time >= 1600 

48Z7A	20180109	1600	1730
48Z55	20180109	1530	1700
90081	20180109	1600	1700

48Z7A	28819	Joe Germuska	20160305	gold
48Z55	67318	Jeremy Bowers	20160101	gold

INSERT INTO solution VALUES (1, 'Jeremy Bowers');
SELECT value FROM solution;

select * from interview 
where person_id = 67318

	I was hired by a woman with a lot of money. I don't know her name but I know she's around 5'5" (65") or 5'7" (67"). She has red hair and she drives a Tesla Model S. I know that she attended the SQL Symphony Concert 3 times in December 2017.
	
	select * from drivers_license
where car_make = 'Tesla' and car_model='Model S' and hair_color='red'              
and gender='female'

202298	68	66	green	red	female	500123	Tesla	Model S
291182	65	66	blue	red	female	08CM64	Tesla	Model S
918773	48	65	black	red	female	917UU3	Tesla	Model S

select person_id, count(*) as cnt from facebook_event_checkin
where event_name = 'SQL Symphony Concert' and date like '201712%' 
group by person_id having cnt=3

person_id	cnt
24556	3
99716	3

select * from person
where license_id=202298 or license_id=291182 or license_id=918773

id	name	license_id	address_number	address_street_name	ssn
78881	Red Korb	918773	107	Camerata Dr	961388910
90700	Regina George	291182	332	Maple Ave	337169072
99716	Miranda Priestly	202298	1883	Golden Ave	987756388

select * from income
where ssn =  987756388       

ssn	annual_income
987756388	310000

INSERT INTO solution VALUES (1, 'Miranda Priestly');
SELECT value FROM solution;

Congrats, you found the brains behind the murder! Everyone in SQL City hails you as the greatest SQL detective of all time. Time to break out the champagne!

------

select * from person
where address_street_name='Northwestern Dr' order by address_number desc limit 1

id	name	license_id	address_number	address_street_name	ssn
14887	Morty Schapiro	118009	4919	Northwestern Dr	111564949

select * from interview
where person_id = 14887

I heard a gunshot and then saw a man run out. He had a "Get Fit Now Gym" bag. The membership number on the bag started with "48Z". Only gold members have those bags. The man got into a car with a plate that included "H42W".

select * from drivers_license
where plate_number like '%H42W%'   

id	age	height	eye_color	hair_color	gender	plate_number	car_make	car_model
183779	21	65	blue	blonde	female	H42W0X	Toyota	Prius
423327	30	70	brown	brown	male	0H42W2	Chevrolet	Spark LS
664760	21	71	black	black	male	4H42WR	Nissan	Altima

select * from get_fit_now_member
where id like '48Z%'

id	person_id	name	membership_start_date	membership_status
48Z38	49550	Tomas Baisley	20170203	silver
48Z7A	28819	Joe Germuska	20160305	gold
48Z55	67318	Jeremy Bowers	20160101	gold
