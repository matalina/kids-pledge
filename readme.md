# Kids Pledge

## Features

* Parent/Child accounts
* Chore Tracking, Assignment & Rotation
* Money Balance, Allowance, etc.
* Weekday/Weekend Daily Checklist
* Punishment Objectives
* Calendar & Appointments

## Database Schema

users
- id
- username
- password
- birthdate
- email address 
- parent (bool 1 = parent, 0 = child)
- (timestamps)

chores
- id
- chore
- points
- (timestamps)
 
chores_users
- id
- user_id
- chore_id 
- week_day_end (bool 1 = weekday, 0 = weekend)
- alternating (tinyint 1 = alternate days, 2 = daily, 3 = weekly, 4 = monthly)
- (timestamps)

users_checklist
- id
- user_id
- chore_id
- (timestamps)

money
- id
- debit_credit (bool 1 = debit, 0 = credit)
- amount
- user_id
- added_by (user_id of person who added amount)
- (timestamps)
 
punishments
- id
- punishment
- get_back_pts
- timestamps

punishments_users
- id
- punishment_id 
- user_id
- get_back_by (date)
- points_earned
- completed_on (date)
- (timestamps)

settings
- id
- setting
- for_all (bool 1 = all, 0 = individual)
- (timestamps)

users_settings
- id
- user_id
- settngs_id
- value
- (timestamps)
 
events
- id
- user_id (for whom)
- added_by (user_id for person who added)
- date_of_event
- events
- (timestamps)

