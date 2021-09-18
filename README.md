# TODO 

- Make design more awesome

## Information

### Status 
✅ is Done
⛔ is Not Implemented
❓ is Waiting for implementation

### URL Pattern

#### GET

1. List of all user
```
/users
```

2. User profile with academy
```
/users/{username}
```

3. User Profile with event 
```
/users/{username}/event
```

4. User Profile with challenge 

```
/users/{username}/challenge
```

#### PUT

1. Update user profile with rules
```
/users/{username}
```


## Requirements

### Functional Requirements
- User email should be unique. ✅
- Username should be unique, only contains alphanumeric characters, and have 4-10 characters long. ✅


### Technical Requirements

- Try to implement TDD approach to solve the problem. ✅
- Use Laravel framework as the backend (use any version you familiar with). ✅
- You can use Bootstrap 4 for the frontend framework. ✅
- Use of any JS codes are not mandatory, feel free to add any if you think it would make better UX. ✅