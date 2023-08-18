<script setup>
import { allPermissions, allRoles } from '@/views/apps/roles/useRoleStore'
import girlUsingMobile from '@images/pages/girl-using-mobile.png'
import { onMounted, ref } from 'vue'

const roles = ref([])
const permissionList = ref([])

const permission = ref([])
const isDialogVisible = ref()

onMounted(async() => {
  const { data: rolesData } = await allRoles()

  roles.value = rolesData.data 
})
onMounted(async() => {

  const { data: permissionsData } = await allPermissions()

  permissionList.value = permissionsData.data
  
})



const AddNewRoleDialog = ref(false)
const EditRoleDialog = ref(false)
</script>

<template>
  <VRow>
    <!-- 👉 Roles -->
    <VCol
      v-for="data in roles"
      :key="data.name"
      cols="12"
      sm="6"
      lg="4"
    >
      <VCard>
        <VCardText class="d-flex align-center pb-1">
          <VCardText class="pb-1">
            <h4 class="text-h4">
              {{ data.name }}
            </h4>
            <h5>
              {{
                data.permmission.name }}
            </h5>
            <div class="d-flex align-center">
              <a
                href="javascript:void(0)"
                @click="EditRoleDialog = true"
              >
                Edit Role
              </a>

                
                
              <VDialog
                v-model="EditRoleDialog"
                max-width="600"
              >
                <!-- Dialog close btn -->
                <DialogCloseBtn @click="EditRoleDialog = !EditRoleDialog" />

                <!-- Dialog Content -->
                <VCard title="Edit Role">
                  <VCardText>
                    <VRow>
                      <VCol cols="12">
                        <AppTextField
                          v-model="role.name"
                          label="Role Name"
                          persistent-hint
                        />
                      </VCol>
                      <VCol cols="12">
                        <AppCombobox
                          v-model="role.permissions"
                          :items="permissionList.value.name"
                          label="Select Permissions"
                          multiple
                          chips
                        />
                      </VCol>
                    </VRow>
                  </VCardText>

                  <VCardText class="d-flex justify-end flex-wrap gap-3">
                    <VBtn
                      variant="tonal"
                      color="secondary"
                      @click="EditRoleDialog = false"
                    >
                      Close
                    </VBtn>
                    <VBtn @click="EditRoleDialog = false">
                      Save
                    </VBtn>
                  </VCardText>
                </VCard>
              </VDialog>
            </div>
          </VCardText>
        </VCardText>
      </VCard>
    </VCol>

    <!-- 👉 Add New Role -->
    <VCol
      cols="12"
      sm="6"
      lg="4"
    >
      <VCard
        class="h-100"
        :ripple="false"
        @click="AddNewRoleDialog = true"
      >
        <VRow
          no-gutters
          class="h-100"
        >
          <VCol
            cols="5"
            class="d-flex flex-column justify-end align-center mt-5"
          >
            <img
              width="85"
              :src="girlUsingMobile"
            >
          </VCol>

          <VCol cols="7">
            <VCardText
              class="d-flex flex-column align-end justify-end gap-2 h-100"
              style="text-align: end;"
            >
              <VBtn>Add New Role</VBtn>
              <span>Add role, if it doesnt exist.</span>
            </VCardText>
          </VCol>
        </VRow>
      </VCard>
      <VDialog
        v-model="AddNewRoleDialog"
        max-width="600"
      >
        <!-- Dialog close btn -->
        <DialogCloseBtn @click="AddNewRoleDialog = !AddNewRoleDialog" />

        <!-- Dialog Content -->
        <VCard title="New Role">
          <VCardText>
            <VRow>
              <VCol cols="12">
                <AppTextField
                  v-model="role"
                  label="Role Name"
                  persistent-hint
                />
              </VCol>
              <VCol cols="12">
                <AppCombobox
                  v-model="permissions"
                  :items="permissionList"
                  label="Select Permissions"
                  multiple
                  chips
                />
              </VCol>
            </VRow>
          </VCardText>

          <VCardText class="d-flex justify-end flex-wrap gap-3">
            <VBtn
              variant="tonal"
              color="secondary"
              @click="AddNewRoleDialog = false"
            >
              Close
            </VBtn>
            <VBtn @click="AddNewRoleDialog = false">
              Save
            </VBtn>
          </VCardText>
        </VCard>
      </VDialog>
    </VCol>
  </VRow>
</template>
