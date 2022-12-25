<template>
    <div class="container mt-4">
      <h1 class="text-white bg-dark text-center">View Students</h1>
   
        <router-link to="/add-student" class="btn btn-primary mt-3 mb-3 float-right">Add Student</router-link>
        <table class="table table-striped table-bordered">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Contact No</th>
                <th>Action</th>
            </thead>

            <tbody>
          
                <tr v-for="eachStudent in allStudents" :key="eachStudent.id">
                    <td>{{eachStudent.studentFName}}</td>
                    <td>{{eachStudent.studentLName}}</td>
                    <td>{{eachStudent.studentEmailId}}</td>
                    <td>{{eachStudent.studentContactNo}}</td>
                    <td>
                        <router-link :to="'/edit-student/'+eachStudent.id" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-edit"></i></router-link>
                        <router-link :to="'/del-student/'+eachStudent.id"  class="btn btn-danger  btn-sm btn-rounded"><i class="fa fa-trash"></i></router-link>
                    </td>
                </tr>
           
            </tbody>
        </table>
    </div>
</template>


<script>
    
    export default {

        data(){
            return {
              allStudents:{},
              form:
              {
                studentFName     : '',
                studentLName     : '',
                studentEmailId   : '',
                studentContactNo : ''
              },
            }
        },
        
        methods:{
            
            viewStudents()
            {
                axios.get('/api/get-all-student')
                     .then((response) => {
                        this.allStudents = response.data
                    });
            },

        },
        created() 
        {
            this.viewStudents();
        },
    }
</script> 