<script setup>
import { VForm } from 'vuetify/components/VForm'

const props = defineProps({
  rolePermissions: {
    type: Object,
    required: false,
    default: () => ({
      name: '',
      permissions: [],
    }),
  },
  isDialogVisible: {
    type: Boolean,
    required: true,
  },
})

const emit = defineEmits([
  'update:isDialogVisible',
  'update:rolePermissions',
])

const role = ref('')
const refPermissionForm = ref()
const permissions = ref([])


const onSubmit = () => {
  const rolePermissions = {
    name: role.value,
    permissions: permissions.value,
  }

  emit('update:rolePermissions', rolePermissions)
  emit('update:isDialogVisible', false)
  isSelectAll.value = false
  refPermissionForm.value?.reset()
}

const onReset = () => {
  emit('update:isDialogVisible', false)
  isSelectAll.value = false
  refPermissionForm.value?.reset()
}
</script>

<template>
  <VDialog
    :width="$vuetify.display.smAndDown ? 'auto' : 900"
    :model-value="props.isDialogVisible"
    @update:model-value="onReset"
  >
    <!-- 👉 Dialog close btn -->
    <DialogCloseBtn @click="onReset" />

    <VCard class="pa-sm-8 pa-5">
      <!-- 👉 Title -->
      <VCardItem class="text-center">
        <VCardTitle class="text-h3 mb-3">
          {{ props.rolePermissions.name ? 'Edit' : 'Add New' }} Role
        </VCardTitle>
        <p class="text-base mb-0">
          Set Role Permissions
        </p>
      </VCardItem>

      <VCardText class="mt-6">
        <!-- 👉 Form -->
        <VForm ref="refPermissionForm">
          <!-- 👉 Role name -->
          <AppTextField
            v-model="role"
            label="Role Name"
            placeholder="Enter Role Name"
          />

          <!-- 👉 Role Permissions -->

         
          <AppSelect
            v-model="value"
            :items="permissionList"
            item-title="name"
            item-value="name"
            label="Select Perimssion"
            multiple
            clearable
            clear-icon="tabler-x"
          >
            <template #selection="{ permissionList }">
              <VChip>
                <span>{{ permissionList.name }}</span>
              </VChip>
            </template>
          </AppSelect>
        

          <!-- 👉 Actions button -->
          <div class="d-flex align-center justify-center gap-3 mt-6">
            <VBtn @click="onSubmit">
              Submit
            </VBtn>

            <VBtn
              color="secondary"
              variant="tonal"
              @click="onReset"
            >
              Cancel
            </VBtn>
          </div>
        </VForm>
      </VCardText>
    </VCard>
  </VDialog>
</template>

<style lang="scss">
.permission-table {
  td {
    border-block-end: 1px solid rgba(var(--v-border-color), var(--v-border-opacity));
    padding-block: 0.5rem;

    .v-checkbox {
      min-inline-size: 4.75rem;
    }

    &:not(:first-child) {
      padding-inline: 0.5rem;
    }

    .v-label {
      white-space: nowrap;
    }
  }
}
</style>
